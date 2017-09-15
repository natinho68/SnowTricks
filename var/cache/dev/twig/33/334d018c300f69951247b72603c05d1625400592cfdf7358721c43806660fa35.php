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
        $__internal_5ce1ffb71a4db7e31f00d5a7c928cc917089fa60ef7d8cc9112ba790c232be79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce1ffb71a4db7e31f00d5a7c928cc917089fa60ef7d8cc9112ba790c232be79->enter($__internal_5ce1ffb71a4db7e31f00d5a7c928cc917089fa60ef7d8cc9112ba790c232be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c565ff8c658536b0a3c824041fab787fca281c5e708d80335e09b43f1d4db897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c565ff8c658536b0a3c824041fab787fca281c5e708d80335e09b43f1d4db897->enter($__internal_c565ff8c658536b0a3c824041fab787fca281c5e708d80335e09b43f1d4db897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5ce1ffb71a4db7e31f00d5a7c928cc917089fa60ef7d8cc9112ba790c232be79->leave($__internal_5ce1ffb71a4db7e31f00d5a7c928cc917089fa60ef7d8cc9112ba790c232be79_prof);

        
        $__internal_c565ff8c658536b0a3c824041fab787fca281c5e708d80335e09b43f1d4db897->leave($__internal_c565ff8c658536b0a3c824041fab787fca281c5e708d80335e09b43f1d4db897_prof);

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
