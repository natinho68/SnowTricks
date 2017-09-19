<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_7b0117f361a43b79f5155bef8bc1e6987424eea8a959efa6da5b2326c8fabdd3 extends Twig_Template
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
        $__internal_5839f4f7db588b7387f1f20e0bdc461cd64c52b9da639cd4aece04c74d05ea18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5839f4f7db588b7387f1f20e0bdc461cd64c52b9da639cd4aece04c74d05ea18->enter($__internal_5839f4f7db588b7387f1f20e0bdc461cd64c52b9da639cd4aece04c74d05ea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_d792ddb6963c17c46ce50e69d863190024a5c0615c7efad4a88768551d25b653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d792ddb6963c17c46ce50e69d863190024a5c0615c7efad4a88768551d25b653->enter($__internal_d792ddb6963c17c46ce50e69d863190024a5c0615c7efad4a88768551d25b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_5839f4f7db588b7387f1f20e0bdc461cd64c52b9da639cd4aece04c74d05ea18->leave($__internal_5839f4f7db588b7387f1f20e0bdc461cd64c52b9da639cd4aece04c74d05ea18_prof);

        
        $__internal_d792ddb6963c17c46ce50e69d863190024a5c0615c7efad4a88768551d25b653->leave($__internal_d792ddb6963c17c46ce50e69d863190024a5c0615c7efad4a88768551d25b653_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
