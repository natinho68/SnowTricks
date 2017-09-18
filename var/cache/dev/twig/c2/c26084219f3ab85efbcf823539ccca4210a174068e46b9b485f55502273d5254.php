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
        $__internal_ef8ea063783d558b83ee6b55bc49965548263b0fb62f8631cb0fa1b2fb6e169a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8ea063783d558b83ee6b55bc49965548263b0fb62f8631cb0fa1b2fb6e169a->enter($__internal_ef8ea063783d558b83ee6b55bc49965548263b0fb62f8631cb0fa1b2fb6e169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_acb17dcf1684d0181bd5b79cdc90d314a59c59d11b869563555d53e4081f4e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb17dcf1684d0181bd5b79cdc90d314a59c59d11b869563555d53e4081f4e3a->enter($__internal_acb17dcf1684d0181bd5b79cdc90d314a59c59d11b869563555d53e4081f4e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ef8ea063783d558b83ee6b55bc49965548263b0fb62f8631cb0fa1b2fb6e169a->leave($__internal_ef8ea063783d558b83ee6b55bc49965548263b0fb62f8631cb0fa1b2fb6e169a_prof);

        
        $__internal_acb17dcf1684d0181bd5b79cdc90d314a59c59d11b869563555d53e4081f4e3a->leave($__internal_acb17dcf1684d0181bd5b79cdc90d314a59c59d11b869563555d53e4081f4e3a_prof);

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
