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
        $__internal_f1c0fa2bd99e761749c9c095ad206e91022a52360f19d8bd71b2f3f9f1336e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c0fa2bd99e761749c9c095ad206e91022a52360f19d8bd71b2f3f9f1336e6b->enter($__internal_f1c0fa2bd99e761749c9c095ad206e91022a52360f19d8bd71b2f3f9f1336e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6fedc43da8c5ea15a3440f797d453792b8a700f11689a0d4efbe6c15bf3b0507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fedc43da8c5ea15a3440f797d453792b8a700f11689a0d4efbe6c15bf3b0507->enter($__internal_6fedc43da8c5ea15a3440f797d453792b8a700f11689a0d4efbe6c15bf3b0507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f1c0fa2bd99e761749c9c095ad206e91022a52360f19d8bd71b2f3f9f1336e6b->leave($__internal_f1c0fa2bd99e761749c9c095ad206e91022a52360f19d8bd71b2f3f9f1336e6b_prof);

        
        $__internal_6fedc43da8c5ea15a3440f797d453792b8a700f11689a0d4efbe6c15bf3b0507->leave($__internal_6fedc43da8c5ea15a3440f797d453792b8a700f11689a0d4efbe6c15bf3b0507_prof);

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
