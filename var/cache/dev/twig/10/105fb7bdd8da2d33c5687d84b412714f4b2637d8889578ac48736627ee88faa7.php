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
        $__internal_93f1948732c7c162e8b7947a5631ca18650f2ec72d497a63537e9c8cf41c1cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f1948732c7c162e8b7947a5631ca18650f2ec72d497a63537e9c8cf41c1cae->enter($__internal_93f1948732c7c162e8b7947a5631ca18650f2ec72d497a63537e9c8cf41c1cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_88792d36ad86220f7e1ac47bbc78940f1e5845749716e181671e7d804b998a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88792d36ad86220f7e1ac47bbc78940f1e5845749716e181671e7d804b998a8d->enter($__internal_88792d36ad86220f7e1ac47bbc78940f1e5845749716e181671e7d804b998a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_93f1948732c7c162e8b7947a5631ca18650f2ec72d497a63537e9c8cf41c1cae->leave($__internal_93f1948732c7c162e8b7947a5631ca18650f2ec72d497a63537e9c8cf41c1cae_prof);

        
        $__internal_88792d36ad86220f7e1ac47bbc78940f1e5845749716e181671e7d804b998a8d->leave($__internal_88792d36ad86220f7e1ac47bbc78940f1e5845749716e181671e7d804b998a8d_prof);

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
