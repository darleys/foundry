<div class='rorganizer'>
    <div class="resources">
        <table class='srack'>
            <tr class='rhead'>
                <th>Image Data</th>

            </tr>
            {foreach from=$imageRES item=resource }
                <tr class="type{$resource['id']}" >


                    <td>
                        <div class='title' title='{$resource['desc']}'>{$resource['title']}</div>
                    </td>

                </tr>
            {/foreach}
        </table>
        </div>
    </div>
</div>
