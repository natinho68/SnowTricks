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
        $__internal_7c30de607e79cbf1b11ac2d3dacc1306d61d512e40b6484deb98677c39cf5d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c30de607e79cbf1b11ac2d3dacc1306d61d512e40b6484deb98677c39cf5d81->enter($__internal_7c30de607e79cbf1b11ac2d3dacc1306d61d512e40b6484deb98677c39cf5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7e1520d92ce87811b397d399bf63063b606375f696468abc9027e95b13a1542f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1520d92ce87811b397d399bf63063b606375f696468abc9027e95b13a1542f->enter($__internal_7e1520d92ce87811b397d399bf63063b606375f696468abc9027e95b13a1542f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7c30de607e79cbf1b11ac2d3dacc1306d61d512e40b6484deb98677c39cf5d81->leave($__internal_7c30de607e79cbf1b11ac2d3dacc1306d61d512e40b6484deb98677c39cf5d81_prof);

        
        $__internal_7e1520d92ce87811b397d399bf63063b606375f696468abc9027e95b13a1542f->leave($__internal_7e1520d92ce87811b397d399bf63063b606375f696468abc9027e95b13a1542f_prof);

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
