<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/bootstrap/templates/input/form-element.html.twig */
class __TwigTemplate_1e999990fbfb4355d11ca6527bd6d12b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        $context["classes"] = ["form-item", "js-form-item", ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["type"] ?? null), 54, $this->source))), ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["type"] ?? null), 55, $this->source))), ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 56
($context["name"] ?? null), 56, $this->source))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 57
($context["name"] ?? null), 57, $this->source))), ((!twig_in_filter(        // line 58
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), ((        // line 60
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), ((        // line 61
($context["is_radio"] ?? null)) ? ("radio") : ("")), ((        // line 62
($context["is_checkbox"] ?? null)) ? ("checkbox") : ("")), ((        // line 63
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), ((        // line 64
($context["has_error"] ?? null)) ? ("error has-error") : (""))];
        // line 67
        $context["description_classes"] = ["description", "help-block", (((        // line 70
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 73
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 73), 73, $this->source), "html", null, true);
        echo ">
  ";
        // line 74
        if (twig_in_filter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 75
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 75, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 78))) {
            // line 79
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 79), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo ">
      ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 83
        echo "
  ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 84, $this->source), "html", null, true);
        echo "

  ";
        // line 86
        if ((($context["label_display"] ?? null) == "after")) {
            // line 87
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 87, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 89
        echo "
  ";
        // line 90
        if (($context["errors"] ?? null)) {
            // line 91
            echo "    <div class=\"form-item--error-message alert alert-danger alert-sm\">
      ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 92, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 95
        echo "
  ";
        // line 96
        if ((twig_in_filter(($context["description_display"] ?? null), ["after", "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 96))) {
            // line 97
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 97), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
      ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 101
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "is_form_group", "is_radio", "is_checkbox", "is_autocomplete", "has_error", "description_display", "attributes", "label_display", "label", "description", "children", "errors"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/input/form-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  130 => 101,  124 => 98,  119 => 97,  117 => 96,  114 => 95,  108 => 92,  105 => 91,  103 => 90,  100 => 89,  94 => 87,  92 => 86,  87 => 84,  84 => 83,  78 => 80,  73 => 79,  71 => 78,  68 => 77,  62 => 75,  60 => 74,  55 => 73,  53 => 70,  52 => 67,  50 => 64,  49 => 63,  48 => 62,  47 => 61,  46 => 60,  45 => 59,  44 => 58,  43 => 57,  42 => 56,  41 => 55,  40 => 54,  39 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/input/form-element.html.twig", "/var/www/html/web/themes/contrib/bootstrap/templates/input/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 51, "if" => 74);
        static $filters = array("clean_class" => 54, "escape" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
