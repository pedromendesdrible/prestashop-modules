{if Context::getContext()->isMobile() == 1}

<div class="scroll-left">
    <div class="scroll-left-text">
        {foreach from=$blocos item=bloco name=foo}
        <div class="texto-slide">
            <a href="{$bloco.link}"><b>{$bloco.texto1}</b></a>
            <p> - {$bloco.texto2}</p>
            {if $bloco.codigodesconto}
            <div class="codigodesconto" onclick="copyElementText()" style="display: inline;">
                <div class="tooltip-icon">
                    <p class="dotted" id="codigodesconto">{$bloco.codigodesconto}</p>
                    <i class="material-icons">&#xe14d;</i>
                    <span class="tooltiptext">{l s='Código desconto copiado' d='Admin.Actions'}</span>
                </div>
            </div>
            {/if}
        </div>
        {/foreach}
    </div>
</div>

{else}

<div class="bloco">

    {if $blocos|count == 1}

    <div class="texto-slide">
        <a href="{$blocos[0].link}"><b>{$blocos[0].texto1}</b></a>
        <p> - {$blocos[0].texto2}</p>
        {if $blocos[0].codigodesconto}
        <div class="codigodesconto" onclick="copyElementText()" style="display: inline;">
            <div class="tooltip-icon">
                <p class="dotted" id="codigodesconto">
                    {$blocos[0].codigodesconto}
                </p>
                <i class="material-icons">&#xe14d;</i>
                <span class="tooltiptext">{l s='Código desconto copiado' d='Admin.Actions'}</span>
            </div>
        </div>
        {/if}
    </div>

    {else}

    <div class="swiper-container1">
        <div class="swiper-button-prev1 btn-texto-slide-prev"></div>

        <div class="swiper-wrapper">
            {foreach from=$blocos item=bloco name=foo}
            <div class="swiper-slide">
                <div class="texto-slide">
                    <a href="{$bloco.link}"><b>{$bloco.texto1}</b></a>
                    <p> - {$bloco.texto2}</p>

                    {if $bloco.codigodesconto}
                    <div class="codigodesconto" onclick="copyElementText()" style="display: inline;">
                        <div class="tooltip-icon">
                            <p class="dotted" id="codigodesconto">
                                {$bloco.codigodesconto}
                            </p>
                            <i class="material-icons">&#xe14d;</i>
                            <span class="tooltiptext">{l s='Código desconto copiado' d='Admin.Actions'}</span>
                        </div>
                    </div>
                    {/if}
                </div>
            </div>
            {/foreach}
        </div>

        <div class="swiper-button-next1 btn-texto-slide-next"></div>

    </div>
    {/if}

</div>

{/if}
