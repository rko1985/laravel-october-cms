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

/* C:\xampp\htdocs\october-cms/themes/eduonix/partials/site/header.htm */
class __TwigTemplate_a70943936d8fd69807bfbeb83e03b3976d9ca1cee340f2789810e4d32b0fc729 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 2), "site_name", [], "any", false, false, false, 2), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#about\">About</a>
        </li>   
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#contact\">Contact</a>
        </li>        
      </ul>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-cms/themes/eduonix/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">
    <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Home</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#about\">About</a>
        </li>   
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#contact\">Contact</a>
        </li>        
      </ul>
    </div>
  </nav>", "C:\\xampp\\htdocs\\october-cms/themes/eduonix/partials/site/header.htm", "");
    }
}
