<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_68b039c8543eddeff3f32587364c6b9cca86fd1a741f3cc74d1143d1d3b53d8d extends Twig_Template
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
        $__internal_ccec1e820a79176641e0eea3980a4b421cd4fd3da7b9c67dd0515b02709efb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccec1e820a79176641e0eea3980a4b421cd4fd3da7b9c67dd0515b02709efb2c->enter($__internal_ccec1e820a79176641e0eea3980a4b421cd4fd3da7b9c67dd0515b02709efb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_eeef665d2e7cb71680fa7a68f279716459dd52783eaeba23f8e4e3bc66e27a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeef665d2e7cb71680fa7a68f279716459dd52783eaeba23f8e4e3bc66e27a1f->enter($__internal_eeef665d2e7cb71680fa7a68f279716459dd52783eaeba23f8e4e3bc66e27a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ccec1e820a79176641e0eea3980a4b421cd4fd3da7b9c67dd0515b02709efb2c->leave($__internal_ccec1e820a79176641e0eea3980a4b421cd4fd3da7b9c67dd0515b02709efb2c_prof);

        
        $__internal_eeef665d2e7cb71680fa7a68f279716459dd52783eaeba23f8e4e3bc66e27a1f->leave($__internal_eeef665d2e7cb71680fa7a68f279716459dd52783eaeba23f8e4e3bc66e27a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
