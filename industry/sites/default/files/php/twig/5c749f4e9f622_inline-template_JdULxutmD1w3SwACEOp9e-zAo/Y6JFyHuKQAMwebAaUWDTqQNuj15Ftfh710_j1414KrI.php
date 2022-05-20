<?php

/* {# inline_template_start #}<div class="row view-items-list__item">
{{ field_image }}
<div class="{{ field_image_1 }}">
<div class="view-items-list__body">
<div class="views-field-title">
{{ title }}
</div>
{{ field_mt_price }}
{{ body }}
<div class="views-field views-field-link">
<a class="button button--hover-style-2" target="_blank" href="{{ field_mt_buy_link }}"><i class="fa fa-shopping-cart"></i> {{"Cart"|t}}</a>
</div>
</div>
</div>
</div> */
class __TwigTemplate_0774dedda42a5fafe52b1f826901d6d938aa0c89747b2a64917ea636a063448f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("t" => 11);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"row view-items-list__item\">
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
<div class=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image_1"] ?? null), "html", null, true));
        echo "\">
<div class=\"view-items-list__body\">
<div class=\"views-field-title\">
";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
</div>
";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_price"] ?? null), "html", null, true));
        echo "
";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
<div class=\"views-field views-field-link\">
<a class=\"button button--hover-style-2\" target=\"_blank\" href=\"";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_buy_link"] ?? null), "html", null, true));
        echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cart")));
        echo "</a>
</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row view-items-list__item\">
{{ field_image }}
<div class=\"{{ field_image_1 }}\">
<div class=\"view-items-list__body\">
<div class=\"views-field-title\">
{{ title }}
</div>
{{ field_mt_price }}
{{ body }}
<div class=\"views-field views-field-link\">
<a class=\"button button--hover-style-2\" target=\"_blank\" href=\"{{ field_mt_buy_link }}\"><i class=\"fa fa-shopping-cart\"></i> {{\"Cart\"|t}}</a>
</div>
</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  79 => 9,  75 => 8,  70 => 6,  64 => 3,  60 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"row view-items-list__item\">
{{ field_image }}
<div class=\"{{ field_image_1 }}\">
<div class=\"view-items-list__body\">
<div class=\"views-field-title\">
{{ title }}
</div>
{{ field_mt_price }}
{{ body }}
<div class=\"views-field views-field-link\">
<a class=\"button button--hover-style-2\" target=\"_blank\" href=\"{{ field_mt_buy_link }}\"><i class=\"fa fa-shopping-cart\"></i> {{\"Cart\"|t}}</a>
</div>
</div>
</div>
</div>", "");
    }
}
