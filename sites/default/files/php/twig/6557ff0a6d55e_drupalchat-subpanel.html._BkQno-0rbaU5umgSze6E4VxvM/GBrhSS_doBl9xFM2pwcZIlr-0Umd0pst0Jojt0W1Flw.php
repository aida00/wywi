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

/* modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig */
class __TwigTemplate_bfcf78ce2aa5de1a585ca3319e1327248aaad6cff99eae09e3abb6b3b6941c0a extends \Twig\Template
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
        // line 1
        echo "<a href=\"#\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "name", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo " subpanel_toggle\">
  <span class=\"subpanel_title_text\">
      ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "icon", [], "any", true, true, true, 3)) {
            // line 4
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "icon", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 6
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "text", [], "any", true, true, true, 6)) {
            // line 7
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "text", [], "any", false, false, true, 7), 7, $this->source));
            echo "
      ";
        }
        // line 9
        echo "  </span>
</a>
<div class=\"subpanel\">
    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "header", [], "any", true, true, true, 12)) {
            // line 13
            echo "        <div class=\"subpanel_title\">
            ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "header", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
            <span class=\"options\"></span>
            <span class=\"min\">_</span>
        </div>
    ";
        }
        // line 19
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "contents", [], "any", true, true, true, 19)) {
            // line 20
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "contents", [], "any", false, false, true, 20), 20, $this->source));
            echo "
    ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "footer", [], "any", true, true, true, 21)) {
                // line 22
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subpanel"] ?? null), "footer", [], "any", false, false, true, 22), 22, $this->source));
                echo "
    ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  90 => 22,  88 => 21,  83 => 20,  80 => 19,  72 => 14,  69 => 13,  67 => 12,  62 => 9,  56 => 7,  53 => 6,  47 => 4,  45 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig", "/home2/aida00/Wywi.com/modules/contrib/drupalchat/templates/drupalchat-subpanel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 1, "raw" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
