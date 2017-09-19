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
        $__internal_8686c207177a948f0dfffb369358a05a96d862f4dda18ed8b221f9485b4cb127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8686c207177a948f0dfffb369358a05a96d862f4dda18ed8b221f9485b4cb127->enter($__internal_8686c207177a948f0dfffb369358a05a96d862f4dda18ed8b221f9485b4cb127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0c8d1ec41275ff0d29d6f00fa755cb52cc3405a666907248dc83bb440969a079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8d1ec41275ff0d29d6f00fa755cb52cc3405a666907248dc83bb440969a079->enter($__internal_0c8d1ec41275ff0d29d6f00fa755cb52cc3405a666907248dc83bb440969a079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8686c207177a948f0dfffb369358a05a96d862f4dda18ed8b221f9485b4cb127->leave($__internal_8686c207177a948f0dfffb369358a05a96d862f4dda18ed8b221f9485b4cb127_prof);

        
        $__internal_0c8d1ec41275ff0d29d6f00fa755cb52cc3405a666907248dc83bb440969a079->leave($__internal_0c8d1ec41275ff0d29d6f00fa755cb52cc3405a666907248dc83bb440969a079_prof);

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
