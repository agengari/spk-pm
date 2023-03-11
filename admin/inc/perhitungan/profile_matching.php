<div>
<?php
                        $nat = $data['natrium']; //nat = natrium
                        $le = $data['lemak']; //le = lemak
                        $pr = $data['protein']; //pr = protein

                        if ($nat >= 851) {
                            $natrium = 1;
                        } elseif ($nat >= 501) {
                            $natrium = 2;
                        } elseif ($nat >= 351) {
                            $natrium = 3;
                        } elseif ($nat >= 151) {
                            $natrium = 4;
                        } else {
                            $natrium = 5;
                        }

                        if ($le >= 36) {
                            $lemak = 5;
                        } elseif ($le >= 26) {
                            $lemak = 4;
                        } elseif ($le >= 16) {
                            $lemak = 3;
                        } elseif ($le >= 6) {
                            $lemak = 2;
                        } else {
                            $lemak = 1;
                        }

                        if ($pr >= 96) {
                            $protein = 5;
                        } elseif ($pr >= 73) {
                            $protein = 4;
                        } elseif ($pr >= 49) {
                            $protein = 3;
                        } elseif ($pr >= 25) {
                            $protein = 2;
                        } else {
                            $protein = 1;
                        }

                        $gapnatrium = $natrium - 3;
                        $gaplemak = $lemak - 3;
                        $gapprotein = $protein - 1;

                        if ($gapnatrium == 0) {
                            $bobotnatrium = 5;
                        } elseif ($gapnatrium == 1) {
                            $bobotnatrium = 4.5;
                        } elseif ($gapnatrium == -1) {
                            $bobotnatrium = 4;
                        } elseif ($gapnatrium == 2) {
                            $bobotnatrium = 3.5;
                        } elseif ($gapnatrium == -2) {
                            $bobotnatrium = 3;
                        } elseif ($gapnatrium == 3) {
                            $bobotnatrium = 2.5;
                        } elseif ($gapnatrium == -3) {
                            $bobotnatrium = 2;
                        } elseif ($gapnatrium == 4) {
                            $bobotnatrium = 1.5;
                        } elseif ($gapnatrium == -4) {
                            $bobotnatrium = 1;
                        } else {
                            $bobotnatrium = 0;
                        }

                        if ($gaplemak == 0) {
                            $bobotlemak = 5;
                        } elseif ($gaplemak == 1) {
                            $bobotlemak = 4.5;
                        } elseif ($gaplemak == -1) {
                            $bobotlemak = 4;
                        } elseif ($gaplemak == 2) {
                            $bobotlemak = 3.5;
                        } elseif ($gaplemak == -2) {
                            $bobotlemak = 3;
                        } elseif ($gaplemak == 3) {
                            $bobotlemak = 2.5;
                        } elseif ($gaplemak == -3) {
                            $bobotlemak = 2;
                        } elseif ($gaplemak == 4) {
                            $bobotlemak = 1.5;
                        } elseif ($gaplemak == -4) {
                            $bobotlemak = 1;
                        } else {
                            $bobotlemak = 0;
                        }

                        if ($gapprotein == 0) {
                            $bobotprotein = 5;
                        } elseif ($gapprotein == 1) {
                            $bobotprotein = 4.5;
                        } elseif ($gapprotein == -1) {
                            $bobotprotein = 4;
                        } elseif ($gapprotein == 2) {
                            $bobotprotein = 3.5;
                        } elseif ($gapprotein == -2) {
                            $bobotprotein = 3;
                        } elseif ($gapprotein == 3) {
                            $bobotprotein = 2.5;
                        } elseif ($gapprotein == -3) {
                            $bobotprotein = 2;
                        } elseif ($gapprotein == 4) {
                            $bobotprotein = 1.5;
                        } elseif ($gapprotein == -4) {
                            $bobotprotein = 1;
                        } else {
                            $bobotprotein = 0;
                        }

                        $cf = ($bobotnatrium + $bobotlemak) / 2;
                        $sf = $bobotprotein;

                        $nt = ($cf * 80) / 100 + ($sf * 20) / 100;
                    ?>
</div>