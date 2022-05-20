<?php

/* {# inline_template_start #}{{ field_mt_slideshow_path }}
{{ field_mt_slideshow_text }}
<div class="tp-caption__buttons-container">
<a class="button" href="{{ field_mt_slideshow_path_1 }}">View Details</a>
</div> */
class __TwigTemplate_c4b6b3e9ae99f1b4bba348bb122339b4dba5c743504fa64199df026930ff5e03 extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_slideshow_path"] ?? null), "html", null, true));
        echo "
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_slideshow_text"] ?? null), "html", null, true));
        echo "
<div class=\"tp-caption__buttons-container\">
<a class=\"button\" href=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mt_slideshow_path_1"] ?? null), "html", null, true));
        echo "\">View Details</a>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ field_mt_slideshow_path }}
{{ field_mt_slideshow_text }}
<div class=\"tp-caption__buttons-container\">
<a class=\"button\" href=\"{{ field_mt_slideshow_path_1 }}\">View Details</a>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  51 => 2,  47 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}{{ field_mt_slideshow_path }}
{{ field_mt_slideshow_text }}
<div class=\"tp-caption__buttons-container\">
<a class=\"button\" href=\"{{ field_mt_slideshow_path_1 }}\">View Details</a>
</div>", "");
    }
}
