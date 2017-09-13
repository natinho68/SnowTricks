<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_68c38a23be265dd6e22e9bb59bc6674cc67df65ac784156f4290ba4aafcd8f5b extends Twig_Template
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
        $__internal_2d0040c3aff73a5da752ef9307fec9c0c241e932bb1fa2530769bc380fd80b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0040c3aff73a5da752ef9307fec9c0c241e932bb1fa2530769bc380fd80b64->enter($__internal_2d0040c3aff73a5da752ef9307fec9c0c241e932bb1fa2530769bc380fd80b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b3b1df20bd870104752aedda8b9e6c43f5d549e40ac4dbaa57b1f6329250966c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b1df20bd870104752aedda8b9e6c43f5d549e40ac4dbaa57b1f6329250966c->enter($__internal_b3b1df20bd870104752aedda8b9e6c43f5d549e40ac4dbaa57b1f6329250966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2d0040c3aff73a5da752ef9307fec9c0c241e932bb1fa2530769bc380fd80b64->leave($__internal_2d0040c3aff73a5da752ef9307fec9c0c241e932bb1fa2530769bc380fd80b64_prof);

        
        $__internal_b3b1df20bd870104752aedda8b9e6c43f5d549e40ac4dbaa57b1f6329250966c->leave($__internal_b3b1df20bd870104752aedda8b9e6c43f5d549e40ac4dbaa57b1f6329250966c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
