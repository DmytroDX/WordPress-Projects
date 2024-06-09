<?php
$title = get_field('title');
$subTitle = get_field('subtitle');
$textBelowTitle = get_field('text_below_title');
$tableTitle = get_field('table_title');
$topRow = get_field('top_row');
$table = get_field('table');
$textBelowSection = get_field('text_below_section');
?>

<div class="container">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="title">
            <?= $title ?>
        </div>
        <div class="sub-title">
            <?= $subTitle ?>
        </div>
        <div class="text-below-title">
            <?= nl2br($textBelowTitle) ?>
        </div>
        <div class="table-title">
            <?= $tableTitle ?>
        </div>
        <div class="price-table">
            <div class="row row-cols-6">

                <div class="col"></div>

                <?php for ($i = 0; $i < count($topRow); $i++): ?>
                    <div class="col mb-2">
                        <div class="full-stuk-container">
                            <div class="stuk-container">
                                <?php
                                    $index = 'top_row_' . ($i + 1);
                                    echo $topRow[$index] . ' stuks';
                                ?>
                                <div class="triangle">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

                <?php for ($i = 0; $i < count($table); $i++): ?>
                    <?php for ($j = 0; $j < count($table['row_' . ($i + 1)]); $j++): ?>
                        <div class="col mb-2">
                            <div class="table-data">
                                <?php
                                    if ($j === 0) {
                                        echo '<div class="length-data">';
                                        $index = 'length' . ($i + 1);
                                        echo $table['row_' . ($i + 1)][$index] . ' cm';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        continue;
                                    }
                                    $index = 'cell-' . $i . '-' . ($j - 1);
                                    echo $table['row_' . ($i + 1)][$index] === '' ? '-' : '€ ' . $table['row_' . ($i + 1)][$index];
                                ?>
                            </div>
                        </div>
                    <?php endfor; ?>
                <?php endfor; ?>
            </div>
        </div>

        <div class="price-table-mobile d-flex py-4">
            <div class="table-left-side d-flex flex-column justify-content-center align-items-center gap-3">
                <?php for ($i = 0; $i < count($topRow); $i++): ?>
                    <div class="full-stuk-container-mobile">
                        <?php
                            $index = 'top_row_' . ($i + 1);
                            $buttonValue = $topRow[$index] . ' stuks';
                        ?>
                        <button class="stuk-container-mobile" value="<?= $buttonValue ?>">
                            <?= $buttonValue ?>
                        </button>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="table-right-side d-flex justify-content-center align-items-center">
                <?php for ($i = 0; $i < count($topRow); $i++): ?>
                    <?php
                        $index = 'top_row_' . ($i + 1);
                        $containerId = $topRow[$index] . '_stuks';
                    ?>
                    <div class="price-container row row-cols-2" id="<?= $containerId ?>">
                        <?php
                            $lengthArray = [];
                            for ($j = 1; $j <= count($table); $j++) { 
                                $lengthArray[] = $table['row_' . $j]['length' . $j];
                            }
                        ?>
                        <?php for ($j = 0; $j < count($table); $j++): ?>
                            <div class="col length-data mb-3">
                                <?= $lengthArray[$j] . ' cm'; ?>
                            </div>
                            <div class="col mb-3">
                                <?= $table['row_' . $j + 1]['cell-' . $j . '-' . $i] === '' ? '-' : '€ ' . $table['row_' . $j + 1]['cell-' . $j . '-' . $i]; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="text-below-section">
            <?= $textBelowSection; ?>
        </div>
    </div>
</div>