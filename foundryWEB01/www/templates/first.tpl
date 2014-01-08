<div class='rorganizer'>
    <div class="resources">
        <table class='srack'>
            <tr class='rhead'>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Uploaded</th>
                <th>Views</th>
                <th></th>
            </tr>
            {foreach from=$imageRES item=resource }
                <tr class="type{$resource['id']}" >


                    <td>
                        <div class='rack-title' title='{$resource['desc']}'>{$resource['title']}</div>
                    </td>

                </tr>
            {/foreach}
        </table>
        </div>
    </div>
</div>
