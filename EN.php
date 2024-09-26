<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>เส้นทางวิกฤต<</title>
    <link rel="stylesheet" href="css/E.css" /> 
    <script type="module">
        import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
        mermaid.initialize({startOnLoad: true});
    </script>
</head>
<body>
    <div class="container">
        <h1>เส้นทางวิกฤต</h1>
        <form method="post">
            <table>
                <tr>
                    <th>Activity</th>
                    <th>a</th>
                    <th>m</th>
                    <th>b</th>
                    <th>t</th>
                    <th>σ²</th>
                    <th>ES</th>
                    <th>EF</th>
                    <th>LS</th>
                    <th>LF</th>
                    <th>Slack</th>
                    <th>Critical</th>
                </tr>
                <?php
                $activities_data = [
                    'A' => ['dependencies' => []],
                    'B' => ['dependencies' => []],
                    'C' => ['dependencies' => []],
                    'D' => ['dependencies' => ['C']],
                    'E' => ['dependencies' => ['B', 'D']],
                    'F' => ['dependencies' => ['A', 'E']],
                    'G' => ['dependencies' => ['A', 'E']],
                    'H' => ['dependencies' => ['F']],
                    'I' => ['dependencies' => ['G']],
                    'J' => ['dependencies' => ['C']],
                    'K' => ['dependencies' => ['J']],
                    'L' => ['dependencies' => ['K']],
                    'M' => ['dependencies' => ['L']],
                    'N' => ['dependencies' => ['M']],
                    'O' => ['dependencies' => ['N']]
                ];

                class Activity {
                    public $name;
                    public $dependencies;
                    public $a;
                    public $m;
                    public $b;
                    public $t;
                    public $variance;

                    public $es;
                    public $ef;
                    public $ls;
                    public $lf;
                    public $slack;

                    public function __construct($name, $dependencies, $a, $m, $b) {
                        $this->name = $name;
                        $this->dependencies = $dependencies;
                        $this->a = $a;
                        $this->m = $m;
                        $this->b = $b;
                        $this->t = ($a + 4 * $m + $b) / 6;
                        $this->variance = pow(($b - $a) / 6, 2);
                    }
                }

                $activities = [];
                $showResults = false;
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
                    $showResults = true;
                    foreach ($activities_data as $name => $data) {
                        $a = intval($_POST["a_$name"]);
                        $m = intval($_POST["m_$name"]);
                        $b = intval($_POST["b_$name"]);
                        $activities[$name] = new Activity($name, $data['dependencies'], $a, $m, $b);
                    }

                    // Perform calculations
                    calculateESandEF($activities);
                    $activities = calculateLSandLF($activities);
                    $activities = calculateSlack($activities);
                    $criticalPath = findCriticalPath($activities);
                } else {
                    // Initialize empty activities if not POST
                    foreach ($activities_data as $name => $data) {
                        $activities[$name] = new Activity($name, $data['dependencies'], 0, 0, 0);
                    }
                }

                function calculateESandEF($activities) {
                    foreach ($activities as $activity) {
                        if (empty($activity->dependencies)) {
                            $activity->es = 0;
                        } else {
                            $activity->es = 0;
                            foreach ($activity->dependencies as $dep) {
                                foreach ($activities as $act) {
                                    if ($act->name == $dep) {
                                        $activity->es = max($activity->es, $act->ef);
                                    }
                                }
                            }
                        }
                        $activity->ef = $activity->es + $activity->t;
                    }
                }

                function calculateLSandLF($activities) {
                    if (empty($activities)) return [];

                    $activities = array_reverse($activities);
                    $project_duration = max(array_map(function($activity) {
                        return $activity->ef;
                    }, $activities));

                    foreach ($activities as $activity) {
                        if (empty($activity->dependencies)) {
                            $activity->lf = $project_duration;
                        } else {
                            $activity->lf = $project_duration;
                            foreach ($activities as $act) {
                                if (in_array($activity->name, $act->dependencies)) {
                                    $activity->lf = min($activity->lf, $act->ls);
                                }
                            }
                        }
                        $activity->ls = $activity->lf - $activity->t;
                    }
                    return array_reverse($activities);
                }

                function calculateSlack($activities) {
                    foreach ($activities as $activity) {
                        $activity->slack = $activity->ls - $activity->es;
                    }
                    return $activities;
                }

                function findCriticalPath($activities) {
                    $criticalPath = [];
                    foreach ($activities as $activity) {
                        if ($activity->slack == 0) {
                            $criticalPath[] = $activity->name;
                        }
                    }
                    return $criticalPath;
                }

                foreach ($activities_data as $name => $data) {
                    $activityObj = $activities[$name];
                    $a = isset($_POST["a_$name"]) ? intval($_POST["a_$name"]) : 0;
                    $m = isset($_POST["m_$name"]) ? intval($_POST["m_$name"]) : 0;
                    $b = isset($_POST["b_$name"]) ? intval($_POST["b_$name"]) : 0;
                    $t = $showResults ? number_format($activityObj->t, 2) : 0;
                    $variance = $showResults ? number_format($activityObj->variance, 2) : 0;
                    $es = $showResults ? floor($activityObj->es) : 0;
                    $ef = $showResults ? floor($activityObj->ef) : 0;
                    $ls = $showResults ? floor($activityObj->ls) : 0;
                    $lf = $showResults ? floor($activityObj->lf) : 0;
                    $slack = $showResults ? number_format($activityObj->slack, 2) : 0;
                    $isCritical = $showResults ? ($activityObj->slack == 0 ? 'Yes' : 'No') : '';

                    echo "<tr>";
                    echo "<td>$name</td>";
                    echo "<td><input type='number' name='a_$name' value='$a'></td>";
                    echo "<td><input type='number' name='m_$name' value='$m'></td>";
                    echo "<td><input type='number' name='b_$name' value='$b'></td>";
                    echo "<td>$t</td>";
                    echo "<td>$variance</td>";
                    echo "<td>$es</td>";
                    echo "<td>$ef</td>";
                    echo "<td>$ls</td>";
                    echo "<td>$lf</td>";
                    echo "<td>$slack</td>";
                    echo "<td class='critical'>$isCritical</td>";
                    echo "</tr>";
                }
                ?>
            </table>

            <label for="custom_x">X (ถ้าต้องการกำหนดเอง):</label>
            <input type="number" name="custom_x" id="custom_x" step="0.01" value="<?php echo isset($_POST['custom_x']) ? $_POST['custom_x'] : ''; ?>">

            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php if ($showResults) {
            $T = 48; // Define total project duration
            if (isset($_POST['custom_x']) && !empty($_POST['custom_x'])) {
                $X = floatval($_POST['custom_x']);
            } else {
                $X = array_sum(array_map(function($activity) {
                    return ($activity->slack == 0) ? $activity->t : 0;
                }, $activities));
            }

            $variance_sum = array_sum(array_map(function($activity) {
                return ($activity->slack == 0) ? $activity->variance : 0;
            }, $activities));

            if ($variance_sum > 0) {
                $sigma_t = sqrt($variance_sum);
                $Z = ($T - $X) / $sigma_t;
            } else {
                $sigma_t = 0;
                $Z = $T - $X;
            }

            $mermaid_code = "graph TD\n";
            foreach ($activities_data as $name => $data) {
                $mermaid_code .= "{$name}[{$name}]\n";
            }
            foreach ($activities_data as $name => $data) {
                foreach ($data['dependencies'] as $dep) {
                    $mermaid_code .= "{$dep} --> {$name}\n";
                }
            }

            echo "<h2>Project Metrics</h2>";
            echo "<p><strong>Critical Path:</strong> " . implode(' -> ', $criticalPath) . "</p>";
            echo "<p><strong>X:</strong> " . number_format($X, 2) . "</p>";
            echo "<p><strong>T:</strong> " . number_format($T, 2) . "</p>";
            echo "<p><strong>σ<sub>t</sub>:</strong> " . number_format($sigma_t, 2) . "</p>";
            echo "<p><strong>Z:</strong> " . number_format($Z, 2) . "</p>";
            echo "<div class='mermaid'>{$mermaid_code}</div>";
        } ?>
    </div>
</body>
</html>
