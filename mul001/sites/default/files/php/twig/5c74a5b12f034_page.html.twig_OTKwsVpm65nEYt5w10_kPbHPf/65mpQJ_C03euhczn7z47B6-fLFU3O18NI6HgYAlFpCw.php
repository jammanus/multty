<?php

/* themes/custom/mul001/templates/system/page.html.twig */
class __TwigTemplate_38cf6c15b1c43f72ffd0015fa3388c5c572d25e94a61bb2f24990498d2e04f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer_first' => array($this, 'block_footer_first'),
            'footer_second' => array($this, 'block_footer_second'),
            'footer_bottom' => array($this, 'block_footer_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 55, "if" => 57, "block" => 58);
        $filters = array("t" => 93);
        $functions = array("drupal_entity" => 74);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('t'),
                array('drupal_entity')
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

        // line 55
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 57
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 58
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 115
        echo "
<div class=\"wrap\">
";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 119
            echo "  ";
            $this->displayBlock('breadcrumb', $context, $blocks);
        }
        // line 123
        echo "
";
        // line 125
        $this->displayBlock('main', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 183
            echo "  ";
            $this->displayBlock('footer_first', $context, $blocks);
        }
        // line 207
        echo "</div>
";
    }

    // line 58
    public function block_navbar($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        // line 60
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")));
        // line 65
        echo "    <header id=\"header\">

      <div class=\"container\">
        <div class=\"row\">
          ";
        // line 70
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 71
            echo "            ";
            $this->displayBlock('header', $context, $blocks);
            // line 80
            echo "          ";
        }
        // line 81
        echo "        </div>
      </div>

      <div";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
        ";
        // line 85
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 86
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
        }
        // line 88
        echo "        <div class=\"navbar-header\">
          ";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
          ";
        // line 91
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 92
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 99
        echo "        </div>

        ";
        // line 102
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 103
            echo "          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 107
        echo "        ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 108
            echo "          </div>
        ";
        }
        // line 110
        echo "      </div>

    </header>
  ";
    }

    // line 71
    public function block_header($context, array $blocks = array())
    {
        // line 72
        echo "              <div class=\"col-xs-12\" role=\"heading\">
                <div class=\"row\">
                  <div class=\"col-sm-4 col-xs-6\">";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "mul001_branding"), "html", null, true));
        echo "</div>
                  <div class=\"col-md-5 col-sm-4 col-xs-6\">";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "languagedropdownswitcher"), "html", null, true));
        echo "</div>
                  <div class=\"col-md-3 col-sm-4 col-xs-12\">";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalEntity("block", "mul001_search"), "html", null, true));
        echo "</div>
                </div>
              </div>
            ";
    }

    // line 119
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 120
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
  ";
    }

    // line 125
    public function block_main($context, array $blocks = array())
    {
        // line 126
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 130
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 131
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 136
            echo "      ";
        }
        // line 137
        echo "
      ";
        // line 139
        echo "      ";
        // line 140
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 141
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 142
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 143
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 144
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 147
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 150
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 151
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 158
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 161
            echo "        ";
        }
        // line 162
        echo "
        ";
        // line 164
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 168
        echo "      </section>

      ";
        // line 171
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 172
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 177
            echo "      ";
        }
        // line 178
        echo "    </div>
  </div>
";
    }

    // line 131
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 132
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 151
    public function block_highlighted($context, array $blocks = array())
    {
        // line 152
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 158
    public function block_help($context, array $blocks = array())
    {
        // line 159
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 164
    public function block_content($context, array $blocks = array())
    {
        // line 165
        echo "          <a id=\"main-content\"></a>
          ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 172
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 173
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 183
    public function block_footer_first($context, array $blocks = array())
    {
        // line 184
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            ";
        // line 188
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
        echo "
          </div>
          ";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 191
            echo "            ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 196
            echo "          ";
        }
        // line 197
        echo "        </div>
      </div>
      ";
        // line 199
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", array())) {
            // line 200
            echo "        ";
            $this->displayBlock('footer_bottom', $context, $blocks);
            // line 203
            echo "      ";
        }
        // line 204
        echo "    </footer>
  ";
    }

    // line 191
    public function block_footer_second($context, array $blocks = array())
    {
        // line 192
        echo "            <div class=\"col-md-6\">
              ";
        // line 193
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
        echo "
            </div>
            ";
    }

    // line 200
    public function block_footer_bottom($context, array $blocks = array())
    {
        // line 201
        echo "          ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/mul001/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 201,  409 => 200,  402 => 193,  399 => 192,  396 => 191,  391 => 204,  388 => 203,  385 => 200,  383 => 199,  379 => 197,  376 => 196,  373 => 191,  371 => 190,  366 => 188,  360 => 184,  357 => 183,  350 => 174,  347 => 173,  344 => 172,  338 => 166,  335 => 165,  332 => 164,  325 => 159,  322 => 158,  315 => 152,  312 => 151,  305 => 133,  302 => 132,  299 => 131,  293 => 178,  290 => 177,  287 => 172,  284 => 171,  280 => 168,  277 => 164,  274 => 162,  271 => 161,  268 => 158,  265 => 157,  262 => 155,  259 => 154,  256 => 151,  253 => 150,  247 => 147,  245 => 144,  244 => 143,  243 => 142,  242 => 141,  241 => 140,  239 => 139,  236 => 137,  233 => 136,  230 => 131,  227 => 130,  220 => 126,  217 => 125,  210 => 120,  207 => 119,  199 => 76,  195 => 75,  191 => 74,  187 => 72,  184 => 71,  177 => 110,  173 => 108,  170 => 107,  164 => 104,  161 => 103,  158 => 102,  154 => 99,  145 => 93,  142 => 92,  139 => 91,  135 => 89,  132 => 88,  126 => 86,  124 => 85,  120 => 84,  115 => 81,  112 => 80,  109 => 71,  106 => 70,  100 => 65,  98 => 62,  97 => 60,  95 => 59,  92 => 58,  87 => 207,  83 => 183,  81 => 182,  78 => 181,  76 => 125,  73 => 123,  69 => 119,  67 => 118,  63 => 115,  59 => 58,  57 => 57,  55 => 55,);
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
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer_first: Items for the footer region.
 * - page.footer_second: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
      ]
    %}
    <header id=\"header\">

      <div class=\"container\">
        <div class=\"row\">
          {# Header #}
          {% if page.header %}
            {% block header %}
              <div class=\"col-xs-12\" role=\"heading\">
                <div class=\"row\">
                  <div class=\"col-sm-4 col-xs-6\">{{ drupal_entity('block','mul001_branding') }}</div>
                  <div class=\"col-md-5 col-sm-4 col-xs-6\">{{ drupal_entity('block','languagedropdownswitcher') }}</div>
                  <div class=\"col-md-3 col-sm-4 col-xs-12\">{{ drupal_entity('block','mul001_search') }}</div>
                </div>
              </div>
            {% endblock %}
          {% endif %}
        </div>
      </div>

      <div{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
        {% if not navbar_attributes.hasClass(container) %}
          <div class=\"{{ container }}\">
        {% endif %}
        <div class=\"navbar-header\">
          {{ page.navigation }}
          {# .btn-navbar is used as the toggle for collapsed navbar content #}
          {% if page.navigation_collapsible %}
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          {% endif %}
        </div>

        {# Navigation (collapsible) #}
        {% if page.navigation_collapsible %}
          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            {{ page.navigation_collapsible }}
          </div>
        {% endif %}
        {% if not navbar_attributes.hasClass(container) %}
          </div>
        {% endif %}
      </div>

    </header>
  {% endblock %}
{% endif %}

<div class=\"wrap\">
{# breadcrumb #}
{% if page.breadcrumb %}
  {% block breadcrumb %}
      {{ page.breadcrumb }}
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer_first %}
  {% block footer_first %}
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            {{ page.footer_first }}
          </div>
          {% if page.footer_second %}
            {% block footer_second %}
            <div class=\"col-md-6\">
              {{ page.footer_second }}
            </div>
            {% endblock %}
          {% endif %}
        </div>
      </div>
      {% if page.footer_bottom %}
        {% block footer_bottom %}
          {{ page.footer_bottom }}
        {% endblock %}
      {% endif %}
    </footer>
  {% endblock %}
{% endif %}
</div>
", "themes/custom/mul001/templates/system/page.html.twig", "/home/multty/www/drupal-8.5.3/mul001/themes/custom/mul001/templates/system/page.html.twig");
    }
}
