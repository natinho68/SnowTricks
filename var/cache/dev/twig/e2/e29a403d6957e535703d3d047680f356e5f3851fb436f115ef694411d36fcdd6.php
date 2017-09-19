<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_400140564fe7c0f57636f821a8d903e35b349bf7f883f0efa1e61139e7c8f527 extends Twig_Template
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
        $__internal_df2d56f45591c07085be1257ba861ce9af34dedc6183d9be4159e0e2159aef5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2d56f45591c07085be1257ba861ce9af34dedc6183d9be4159e0e2159aef5c->enter($__internal_df2d56f45591c07085be1257ba861ce9af34dedc6183d9be4159e0e2159aef5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dff20a0d45f69bc6c27cd4b6bf1f446a1c77e384f1440bd0c41008fe401e7c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff20a0d45f69bc6c27cd4b6bf1f446a1c77e384f1440bd0c41008fe401e7c79->enter($__internal_dff20a0d45f69bc6c27cd4b6bf1f446a1c77e384f1440bd0c41008fe401e7c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_df2d56f45591c07085be1257ba861ce9af34dedc6183d9be4159e0e2159aef5c->leave($__internal_df2d56f45591c07085be1257ba861ce9af34dedc6183d9be4159e0e2159aef5c_prof);

        
        $__internal_dff20a0d45f69bc6c27cd4b6bf1f446a1c77e384f1440bd0c41008fe401e7c79->leave($__internal_dff20a0d45f69bc6c27cd4b6bf1f446a1c77e384f1440bd0c41008fe401e7c79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
