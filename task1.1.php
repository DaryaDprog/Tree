<?php
$data = array(
    array('ID' => 100, 'PARENT_ID' => 0, 'NAME' => 'Пункт 1',),
    array('ID' => 2, 'PARENT_ID' => 0, 'NAME' => 'Пункт 2',),
    array('ID' => 3, 'PARENT_ID' => 0, 'NAME' => 'Пункт 3',),
    array('ID' => 4, 'PARENT_ID' => 0, 'NAME' => 'Пункт 4',),
    array('ID' => 52, 'PARENT_ID' => 100, 'NAME' => 'Пункт 1.1',),
    array('ID' => 6, 'PARENT_ID' => 100, 'NAME' => 'Пункт 1.2',),
    array('ID' => 7, 'PARENT_ID' => 100, 'NAME' => 'Пункт 1.3',),
    array('ID' => 8, 'PARENT_ID' => 100, 'NAME' => 'Пункт 1.4',),
    array('ID' => 9, 'PARENT_ID' => 52, 'NAME' => 'Пункт 1.1.1',),
    array('ID' => 10, 'PARENT_ID' => 52, 'NAME' => 'Пункт 1.1.2',),
    array('ID' => 11, 'PARENT_ID' => 52, 'NAME' => 'Пункт 1.1.3',),
    array('ID' => 12, 'PARENT_ID' => 52, 'NAME' => 'Пункт 1.1.4',),
    array('ID' => 13, 'PARENT_ID' => 9, 'NAME' => 'Пункт 1.1.1.1',),
    array('ID' => 14, 'PARENT_ID' => 9, 'NAME' => 'Пункт 1.1.1.2',),
    array('ID' => 15, 'PARENT_ID' => 9, 'NAME' => 'Пункт 1.1.1.3',),
    array('ID' => 16, 'PARENT_ID' => 9, 'NAME' => 'Пункт 1.1.1.4',),
    array('ID' => 87, 'PARENT_ID' => 2, 'NAME' => 'Пункт 2.1',),
    array('ID' => 18, 'PARENT_ID' => 2, 'NAME' => 'Пункт 2.2',),
    array('ID' => 19, 'PARENT_ID' => 3, 'NAME' => 'Пункт 3.1',),
    array('ID' => 20, 'PARENT_ID' => 3, 'NAME' => 'Пункт 3.2',),
    array('ID' => 21, 'PARENT_ID' => 4, 'NAME' => 'Пункт 4.1',),
    array('ID' => 22, 'PARENT_ID' => 4, 'NAME' => 'Пункт 4.2',),
    array('ID' => 23, 'PARENT_ID' => 87, 'NAME' => 'Пункт 2.1.1',),
    array('ID' => 24, 'PARENT_ID' => 87, 'NAME' => 'Пункт 2.1.2',),
    array('ID' => 25, 'PARENT_ID' => 23, 'NAME' => 'Пункт 2.1.1.1',),
    array('ID' => 26, 'PARENT_ID' => 23, 'NAME' => 'Пункт 2.1.1.2',),
    array('ID' => 27, 'PARENT_ID' => 19, 'NAME' => 'Пункт 3.1.1',),
    array('ID' => 28, 'PARENT_ID' => 19, 'NAME' => 'Пункт 3.1.2',),
    array('ID' => 1, 'PARENT_ID' => 20, 'NAME' => 'Пункт 3.2.1',),
    array('ID' => 30, 'PARENT_ID' => 1, 'NAME' => 'Пункт 3.2.1.1'));

//открываем список
echo "<ul>";
foreach ($data as $v) {     //проходимся по каждому подмассиву

    if ($v['PARENT_ID'] == 0) {              //выводим Пункт1,Пункт2,Пункт3,Пункт4
        echo "<li>" . $v['NAME'] . "</li>";
    }
    if($v['ID'] == 100) {          //если Пункт1, то открываем в нем список
        foreach ($data as $v) {
            if ($v['PARENT_ID'] == 100) {
                echo "<ul>";
                echo "<li>" . $v['NAME'] . "</li>";  //и заносим все значения Пункт 1.1,Пункт 1.2,Пункт 1.3,Пункт 1.4
                echo "</ul>";
                if($v['ID'] == 52) {         //если Пункт1.1, то открываем в нем список
                    foreach ($data as $v) {
                        if ($v['PARENT_ID'] == 52) {
                            echo "<ul>";
                            echo "<ul>";
                            echo "<li>" . $v['NAME'] . "</li>";  //и заносим все значения Пункт 1.1.1,Пункт 1.1.2,Пункт 1.1.3..
                            echo "</ul>";
                            echo "</ul>";
                            if($v['ID'] == 9) {          //если Пункт1.1.1, то открываем в нем список
                                foreach ($data as $v) {
                                    if ($v['PARENT_ID'] == 9) {
                                        echo "<ul>";
                                        echo "<ul>";
                                        echo "<ul>";
                                        echo "<li>" . $v['NAME'] . "</li>"; //и заносим все значения Пункт 1.1.1.1,Пункт 1.1.1...
                                        echo "</ul>";
                                        echo "</ul>";
                                        echo "</ul>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if($v['ID'] == 2) {         //если Пункт2, то открываем в нем список
        foreach ($data as $v) {
            if ($v['PARENT_ID'] == 2) {
                echo "<ul>";
                echo "<li>" . $v['NAME'] . "</li>"; //и заносим все значения Пункт 2.1,Пункт 2.2
                echo "</ul>";
                if($v['ID'] == 87) {
                    foreach ($data as $v) {
                        if ($v['PARENT_ID'] == 87) {        //если Пункт2.1, то открываем в нем список
                            echo "<ul>";
                            echo "<ul>";
                            echo "<li>" . $v['NAME'] . "</li>"; //и заносим все значения Пункт 2.1.1,Пункт 2.1.2
                            echo "</ul>";
                            echo "</ul>";
                            if($v['ID'] == 23) {
                                foreach ($data as $v) {
                                    if ($v['PARENT_ID'] == 23) { //если Пункт2.1.1, то открываем в нем список
                                        echo "<ul>";
                                        echo "<ul>";
                                        echo "<ul>";
                                        echo "<li>" . $v['NAME'] . "</li>";//и заносим все значения Пункт 2.1.1.1,Пункт 2.1.1.2
                                        echo "</ul>";
                                        echo "</ul>";
                                        echo "</ul>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if($v['ID'] == 3) {              //если Пункт3, то открываем в нем список
        foreach ($data as $v) {
            if ($v['PARENT_ID'] == 3) {
                echo "<ul>";
                echo "<li>" . $v['NAME'] . "</li>"; //и заносим все значения Пункт 3.2,Пункт 3.2
                echo "</ul>";
                if($v['ID'] == 19) {          //если Пункт3.1, то открываем в нем список
                    foreach ($data as $v) {
                        if ($v['PARENT_ID'] == 19) {
                            echo "<ul>";
                            echo "<ul>";
                            echo "<li>" . $v['NAME'] . "</li>"; //и заносим все значения Пункт 3.1.1,Пункт 3.1.2
                            echo "</ul>";
                            echo "</ul>";
                        }
                    }
                }
                if($v['ID'] == 20) {          //если Пункт3.2, то открываем в нем список
                    foreach ($data as $v) {
                        if ($v['PARENT_ID'] == 20) {
                            echo "<ul>";
                            echo "<ul>";
                            echo "<li>" . $v['NAME'] . "</li>"; //и заносим значение Пункта 3.2.1
                            echo "</ul>";
                            echo "</ul>";
                            if($v['ID'] == 1) {     //если Пункт3.2.1, то открываем в нем список
                                foreach ($data as $v) {
                                    if ($v['PARENT_ID'] == 1) {
                                        echo "<ul>";
                                        echo "<ul>";
                                        echo "<ul>";
                                        echo "<li>" . $v['NAME'] . "</li>"; //и заносим значение Пункта 3.2.1.1
                                        echo "</ul>";
                                        echo "</ul>";
                                        echo "</ul>";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if($v['ID'] == 4) {         //если Пункт4, то открываем в нем список
        foreach ($data as $v) {
            if ($v['PARENT_ID'] == 4) {
                echo "<ul>";
                echo "<li>" . $v['NAME'] . "</li>"; //и заносим значения Пункт 4.1 и Пункт 4.2
                echo "</ul>";
            }
        }
    }

}

echo "</ul>";


?>
