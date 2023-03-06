{if $page.page_name != 'checkout'}
  <div class="top-bar">
    <div class="row">

      <div class="col-lg-6 col-left">
        <p class="text-black">{$txt_header}</p>
      </div>

      <div class="col-lg-6 col-right">

        <a href="">Distribuidor</a>
        <a href="">Cliente Profissional</a>

        {if ($customer.is_logged)}
          <a href="{$link->getPageLink('my-account')}">{l s='My Account' d='Shop.Theme.Actions'}</a>
          <a href="{$link->getPageLink('index', true, null, 'mylogout')|escape:'html'}">
            {l s='Sign out' d='Shop.Theme.Actions'}</a>
        {else}
          <a href="{$link->getPageLink('authentication')}">{l s='Sign in' d='Shop.Theme.Actions'}</a>
        {/if}

        <a href=""> {l s='Contacts' d='Shop.Theme.Actions'}</a>

        {hook h="displayNav1"}

      </div>

    </div>
  </div>
{/if}