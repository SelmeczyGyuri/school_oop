<?php


$html = <<<HTML
        <table id = 'admin-subjectstable' class="admin-subjects-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tantárgy</th>
                    <th>
                        <form method='post' action='/subjects/create'>
                            <button type="submit" name='btn-plus' title='Új'>
                                <i class='fa fa-plus plus'></i>Új</button>
                        </form>
                    </th>
                </tr>
            </thead>
            <tbody>%s</tbody>
            <tfoot>
            </tfoot>
        </table>
        HTML;