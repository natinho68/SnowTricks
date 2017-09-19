<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_556f64efd5b13a6c9d370fe4cc9226876bc241dd3522814a3525e7463f56f309 extends Twig_Template
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
        $__internal_4afb8e647df2c3c545c8481c6c1cadea29ef5a3cb75228bfc8f9090e7b8c03ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afb8e647df2c3c545c8481c6c1cadea29ef5a3cb75228bfc8f9090e7b8c03ac->enter($__internal_4afb8e647df2c3c545c8481c6c1cadea29ef5a3cb75228bfc8f9090e7b8c03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_14dc42745fecdfdefbeff70f244e5ea97daa3ced73b26c39ab183c7c6bbe3527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dc42745fecdfdefbeff70f244e5ea97daa3ced73b26c39ab183c7c6bbe3527->enter($__internal_14dc42745fecdfdefbeff70f244e5ea97daa3ced73b26c39ab183c7c6bbe3527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4afb8e647df2c3c545c8481c6c1cadea29ef5a3cb75228bfc8f9090e7b8c03ac->leave($__internal_4afb8e647df2c3c545c8481c6c1cadea29ef5a3cb75228bfc8f9090e7b8c03ac_prof);

        
        $__internal_14dc42745fecdfdefbeff70f244e5ea97daa3ced73b26c39ab183c7c6bbe3527->leave($__internal_14dc42745fecdfdefbeff70f244e5ea97daa3ced73b26c39ab183c7c6bbe3527_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
