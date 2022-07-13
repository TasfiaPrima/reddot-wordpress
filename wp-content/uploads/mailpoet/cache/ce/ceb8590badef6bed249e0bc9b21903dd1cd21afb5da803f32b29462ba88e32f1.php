<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/unknownBlockFallback/block.hbs */
class __TwigTemplate_866285b4d66232af79e04cc666d7c6f3688bb321527d7211bc0c6529a077610f extends Template
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
        echo "<div class=\"mailpoet_tools\"></div>
<div class=\"mailpoet_content mailpoet_unknown_block_fallback\">
  <h2 class=\"mailpoet_unknown_block_fallback_heading\">";
        // line 3
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Unsupported block type");
        echo "</h2>
  <p>";
        // line 4
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_sprintf($this->extensions['MailPoet\Twig\I18n']->translate("\"%s\" block type is not supported and will not be included in the email. You can either delete this block, or enable a plugin that adds support for this block."), "{{blockType}}"), "html", null, true);
        echo "</p>
</div>
<div class=\"mailpoet_block_highlight\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/unknownBlockFallback/block.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/unknownBlockFallback/block.hbs", "C:\\wamp64\\www\\reddotdemo\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\unknownBlockFallback\\block.hbs");
    }
}
