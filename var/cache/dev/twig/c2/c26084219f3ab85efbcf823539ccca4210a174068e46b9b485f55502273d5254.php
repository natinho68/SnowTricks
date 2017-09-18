<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f159b418085a3540b5c0a3d8b304f362cc5170afc244881acf0f789d49a9e88e extends Twig_Template
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
        $__internal_10c4e6d8bb1ec46486effa00bb40512b55a4f7e478eb3fc8d047e25ea0277e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c4e6d8bb1ec46486effa00bb40512b55a4f7e478eb3fc8d047e25ea0277e85->enter($__internal_10c4e6d8bb1ec46486effa00bb40512b55a4f7e478eb3fc8d047e25ea0277e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f8a4667bee97838cff454e38b1b07a10cd510fe28616a292d00a2e2bf07b0e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a4667bee97838cff454e38b1b07a10cd510fe28616a292d00a2e2bf07b0e01->enter($__internal_f8a4667bee97838cff454e38b1b07a10cd510fe28616a292d00a2e2bf07b0e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_10c4e6d8bb1ec46486effa00bb40512b55a4f7e478eb3fc8d047e25ea0277e85->leave($__internal_10c4e6d8bb1ec46486effa00bb40512b55a4f7e478eb3fc8d047e25ea0277e85_prof);

        
        $__internal_f8a4667bee97838cff454e38b1b07a10cd510fe28616a292d00a2e2bf07b0e01->leave($__internal_f8a4667bee97838cff454e38b1b07a10cd510fe28616a292d00a2e2bf07b0e01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
