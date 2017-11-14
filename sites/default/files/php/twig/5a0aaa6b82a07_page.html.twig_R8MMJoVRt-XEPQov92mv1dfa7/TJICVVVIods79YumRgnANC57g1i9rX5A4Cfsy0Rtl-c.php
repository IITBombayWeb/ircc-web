<?php

/* themes/customtouchm/templates/page.html.twig */
class __TwigTemplate_aef64a61e56722e4820c46c3224ebd6c5c6891f4838653df0b81037ef8a84abd extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "
<div class=\"container-fluid custom_main_container global_no_padding ";
        // line 2
        if ($this->getAttribute(($context["user"] ?? null), "hasPermission", array(0 => "administer nodes"), "method")) {
            echo " custom_topbar_margin1 ";
        }
        echo "\">
  
  <div class=\"row\">
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 custom_height_fit_content top_social\">
      ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_nav", array()), "html", null, true));
        echo "
      ";
        // line 8
        echo "    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 custom_height_fit_content\">
      <header id=\"header\"class=\"header\"role=\"banner\">
    \t\t";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
    \t\t";
        // line 20
        echo " \t\t   </header>
    </div>
  </div>
  <div class=\"row\">
  \t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 custom_menu_region custom_height_fit_content\">
      ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "full_width_menu", array()), "html", null, true));
        echo "
  \t\t";
        // line 27
        echo "  \t</div>
  </div>
  <div class=\"row\">
  \t<div class=\"col-md-12 custom_slider_region custom_height_fit_content global_no_padding\">
      ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
        echo "
  \t\t";
        // line 33
        echo "  \t</div>
  </div>
  <div class=\"row custom_height_inherit1 custom_min_height\">
  \t<div class=\"";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            echo " col-md-9 ";
        } else {
            echo " col-md-12 ";
        }
        echo " custom_main_content_region custom_height_fit_content\">
      ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </div>
    ";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 40
            echo "  \t<div class=\"col-md-3 custom_sidebar_region custom_height_fit_content\">
      ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo " 
  \t</div>
    ";
        }
        // line 44
        echo "  </div>
  <div class=\"row\">
    <div class=\"col-xs-12 col-sm-6 col-md-12 custom_search_region global_no_padding custom_height_fit_content\">
      <div class=\"col-md-9\">
        ";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search_one", array()), "html", null, true));
        echo "
        <p> <h2 class=\"search-text\">Search this website by keywords or browse from sections below</h2> </p>
      </div>
      <div class=\"col-md-3\">
        ";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search_two", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>
  <div class=\"row footer \">
  \t<div class=\"col-xs-12 col-sm-6 col-md-3 custom_footer_1_region custom_height_fit_content\">
      ";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", array()), "html", null, true));
        echo "
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3 custom_footer_2_region custom_height_fit_content\">
      ";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", array()), "html", null, true));
        echo "
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3 custom_footer_3_region custom_height_fit_content\">
      ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", array()), "html", null, true));
        echo "
  \t</div>
  \t<div class=\"col-xs-12 col-sm-6 col-md-3 custom_footer_4_region custom_height_fit_content\">
      ";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", array()), "html", null, true));
        echo "
  \t</div>
  \t<div class=\"col-xs-12 col-sm-12 col-md-12 custom_footer_5_region custom_height_fit_content\">
      ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
  \t</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/customtouchm/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 70,  158 => 67,  152 => 64,  146 => 61,  140 => 58,  131 => 52,  124 => 48,  118 => 44,  112 => 41,  109 => 40,  107 => 39,  102 => 37,  94 => 36,  89 => 33,  85 => 31,  79 => 27,  75 => 25,  68 => 20,  64 => 11,  59 => 8,  55 => 6,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/customtouchm/templates/page.html.twig", "/var/www/html/drupalsolr/themes/customtouchm/templates/page.html.twig");
    }
}
