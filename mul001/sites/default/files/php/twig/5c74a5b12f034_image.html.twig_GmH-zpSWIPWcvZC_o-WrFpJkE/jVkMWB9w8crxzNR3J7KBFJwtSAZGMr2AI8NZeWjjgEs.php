<?php

/* themes/custom/mul001/templates/system/image.html.twig */
class __TwigTemplate_e9af043ecc0b7d9271ecb908b430b5459dcb32fcb2650558cd6e37445ca4f1ff extends Twig_Template
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
        $tags = array("set" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
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

        // line 15
        $context["classes"] = array(0 => (($this->getAttribute($this->getAttribute(        // line 16
($context["theme"] ?? null), "settings", array()), "image_shape", array())) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "image_shape", array())) : ("")), 1 => (($this->getAttribute($this->getAttribute(        // line 17
($context["theme"] ?? null), "settings", array()), "image_responsive", array())) ? ("img-responsive") : ("")));
        // line 19
        echo "<img";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo " />
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mul001/templates/system/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  45 => 17,  44 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation of an image.
 *
 * Available variables:
 * - attributes: HTML attributes for the img tag.
 * - style_name: (optional) The name of the image style applied.
 *
 * @ingroup templates
 *
 * @see template_preprocess_image()
 */
#}
{% set classes = [
  theme.settings.image_shape ? theme.settings.image_shape,
  theme.settings.image_responsive ? 'img-responsive',
] %}
<img{{ attributes.addClass(classes) }} />
", "themes/custom/mul001/templates/system/image.html.twig", "/home/multty/www/drupal-8.5.3/mul001/themes/custom/mul001/templates/system/image.html.twig");
    }
}
