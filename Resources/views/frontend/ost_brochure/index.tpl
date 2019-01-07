
{* file to extend *}
{extends file="parent:frontend/index/index.tpl"}

{* our plugin namespace *}
{namespace name="frontend/ost-brochure/index"}



{* add our plugin to the breadcrumb *}
{block name='frontend_index_start'}

    {* smarty parent *}
    {$smarty.block.parent}

    {* our breadcrumb name *}
    {assign var="breadcrumbName" value="Prospekte"}

    {* add it *}
    {$sBreadcrumb[] = ['name' => $breadcrumbName, 'link'=> ""]}

{/block}



{* remove left sidebar *}
{block name='frontend_index_content_left'}{/block}



{* main content *}
{block name='frontend_index_content'}

    {* title *}
    <h1>ÜBERSICHT ÜBER UNSERE PROSPEKTE</h1>

    {* every brochure *}
    {foreach $ostBrochures as $brochure}

        <div class="ost-brochures is--brochure">
            <h3>{$brochure->getHeader()}</h3>
            <div class="img--container">
                <img src="{$brochure->getImage()}">
            </div>
            <div class="info--container">
                Preisgültigkeit: <br />
                vom {$brochure->getStartDate()->format( "d.m.Y" )} bis {$brochure->getEndDate()->format( "d.m.Y" )}
                <br /><br />
                {$brochure->getName()}
                <br />
                {$brochure->getInfo()}
                <br /><br />
                <a href="{$brochure->getCatalog()}">Jetzt online blättern</a>
            </div>
            <div style="clear: both;"></div>
        </div>

    {/foreach}

{/block}
