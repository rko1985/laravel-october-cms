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

/* C:\xampp\htdocs\october-cms/themes/eduonix/partials/site/footer.htm */
class __TwigTemplate_6fd95f45cd0f0d6f86e63d07bb73eeb13b6e52f943bac77d0337ca52ed19499f extends \Twig\Template
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
        echo "<p class=\"text-center\">Copyright &copy; 2019 CMS</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october-cms/themes/eduonix/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"text-center\">Copyright &copy; 2019 CMS</p>", "C:\\xampp\\htdocs\\october-cms/themes/eduonix/partials/site/footer.htm", "");
    }
}
