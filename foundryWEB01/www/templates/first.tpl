<div class='rorganizer'>
    <div class="resources">
        <table class='srack'>
            <tr class='rhead'>
                <th>Image Gallery</th>

            </tr>
            {$imageRES=Foundry_Memory::get("testImages")}
            {foreach from=$imageRES item=resource }
                <tr class="type{$resource['id']}" >
                    <td>
                        <div class='title' title='{$resource['desc']}'>{$resource['title']}
                            <span ><img src="data:image/jpeg;base64,{base64_encode($resource['idata']|unserialize)}" class="myImages"></span>
                        </div>
                    </td>

                </tr>
            {/foreach}
        </table>
        </div>
    </div>
</div>
