<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/Design/Cms/create_category.html.twig */
class __TwigTemplate_eca3142e145d7dd7bfb1c5a4fa8bbfc131a5f219656ecc4580b67c523471a176 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/Cms/create_category.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 30
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/Cms/Blocks/category_form.html.twig", ["cmsPageCategoryForm" =>         // line 31
($context["cmsPageCategoryForm"] ?? null), "cmsCategoryParentId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 32
($context["app"] ?? null), "request", []), "query", []), "get", [0 => "id_cms_category"], "method")]);
        // line 34
        echo "
    </div>
  </div>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/cms_page.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/create_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 41,  61 => 40,  58 => 39,  51 => 34,  49 => 32,  48 => 31,  47 => 30,  43 => 28,  40 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Cms/create_category.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\Design\\Cms\\create_category.html.twig");
    }
}
