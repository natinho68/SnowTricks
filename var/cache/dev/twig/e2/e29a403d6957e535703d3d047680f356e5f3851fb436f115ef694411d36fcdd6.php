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
        $__internal_8ee679fc60de2c530b7cfa70aa8fc2bab9845c1f01798bc50e533ea7401209f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee679fc60de2c530b7cfa70aa8fc2bab9845c1f01798bc50e533ea7401209f5->enter($__internal_8ee679fc60de2c530b7cfa70aa8fc2bab9845c1f01798bc50e533ea7401209f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f981cc9528e8c1d404dc1b1ee939088a94e4af41f5d500e9eaa174273e30f265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f981cc9528e8c1d404dc1b1ee939088a94e4af41f5d500e9eaa174273e30f265->enter($__internal_f981cc9528e8c1d404dc1b1ee939088a94e4af41f5d500e9eaa174273e30f265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8ee679fc60de2c530b7cfa70aa8fc2bab9845c1f01798bc50e533ea7401209f5->leave($__internal_8ee679fc60de2c530b7cfa70aa8fc2bab9845c1f01798bc50e533ea7401209f5_prof);

        
        $__internal_f981cc9528e8c1d404dc1b1ee939088a94e4af41f5d500e9eaa174273e30f265->leave($__internal_f981cc9528e8c1d404dc1b1ee939088a94e4af41f5d500e9eaa174273e30f265_prof);

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
