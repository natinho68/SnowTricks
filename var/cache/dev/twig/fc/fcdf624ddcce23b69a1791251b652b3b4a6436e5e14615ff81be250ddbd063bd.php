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
        $__internal_08983e51c5f5ab62bba5b3d3f0b213bbdb92629acd76a063b81f887d7ac79531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08983e51c5f5ab62bba5b3d3f0b213bbdb92629acd76a063b81f887d7ac79531->enter($__internal_08983e51c5f5ab62bba5b3d3f0b213bbdb92629acd76a063b81f887d7ac79531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c5e7e977a87dd865d3611c0a6a777f70ec1afb44f4ac267826b049a36e8e0807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e7e977a87dd865d3611c0a6a777f70ec1afb44f4ac267826b049a36e8e0807->enter($__internal_c5e7e977a87dd865d3611c0a6a777f70ec1afb44f4ac267826b049a36e8e0807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_08983e51c5f5ab62bba5b3d3f0b213bbdb92629acd76a063b81f887d7ac79531->leave($__internal_08983e51c5f5ab62bba5b3d3f0b213bbdb92629acd76a063b81f887d7ac79531_prof);

        
        $__internal_c5e7e977a87dd865d3611c0a6a777f70ec1afb44f4ac267826b049a36e8e0807->leave($__internal_c5e7e977a87dd865d3611c0a6a777f70ec1afb44f4ac267826b049a36e8e0807_prof);

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
