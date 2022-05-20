<?php

/* themes/custom/mul001/templates/block/block--block-content-mainvisual.html.twig */
class __TwigTemplate_bb7875051d66365a20c2b834c42a8ef93456f9757bcd63ee9b8527786984789a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "block" => 11);
        $filters = array("clean_class" => 4);
        $functions = array("file_url" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
                array('clean_class'),
                array('file_url')
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

        // line 2
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 5
($context["plugin_id"] ?? null))), 3 => "clearfix", 4 => "block-mainvisual");
        // line 10
        echo "<section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "</section>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "  <div class=\"mainvisual-bg\" style=\"background-image: url(";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mv_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo ");\">
    <div class=\"mainvisual-box\">
      <h1>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_mv_title", array()), 0, array(), "array"), "html", null, true));
        echo "</h1>
    </div>
  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mul001/templates/block/block--block-content-mainvisual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  63 => 12,  60 => 11,  55 => 18,  53 => 11,  48 => 10,  46 => 5,  45 => 4,  44 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'clearfix',
    'block-mainvisual',
  ]
%}
<section{{ attributes.addClass(classes) }}>
  {% block content %}
  <div class=\"mainvisual-bg\" style=\"background-image: url({{ file_url(content.field_mv_background_image['#items'].entity.uri.value) }});\">
    <div class=\"mainvisual-box\">
      <h1>{{content.field_mv_title[0]}}</h1>
    </div>
  </div>
  {% endblock %}
</section>
", "themes/custom/mul001/templates/block/block--block-content-mainvisual.html.twig", "/home/multty/www/drupal-8.5.3/mul001/themes/custom/mul001/templates/block/block--block-content-mainvisual.html.twig");
    }
}
