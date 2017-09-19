<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_75f0d6782c8770f49cb335a145077e81a9d90aa1874c18de0c5e2c408861be67 extends Twig_Template
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
        $__internal_ae27408d308408470486c495758fc8ce55de4673c069f745daa106876c296eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae27408d308408470486c495758fc8ce55de4673c069f745daa106876c296eaa->enter($__internal_ae27408d308408470486c495758fc8ce55de4673c069f745daa106876c296eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_64a296595de99c1ace22a0acc4b76722577f9090267b7146549ccea4d6a46b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a296595de99c1ace22a0acc4b76722577f9090267b7146549ccea4d6a46b4d->enter($__internal_64a296595de99c1ace22a0acc4b76722577f9090267b7146549ccea4d6a46b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ae27408d308408470486c495758fc8ce55de4673c069f745daa106876c296eaa->leave($__internal_ae27408d308408470486c495758fc8ce55de4673c069f745daa106876c296eaa_prof);

        
        $__internal_64a296595de99c1ace22a0acc4b76722577f9090267b7146549ccea4d6a46b4d->leave($__internal_64a296595de99c1ace22a0acc4b76722577f9090267b7146549ccea4d6a46b4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
