<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_400140564fe7c0f57636f821a8d903e35b349bf7f883f0efa1e61139e7c8f527 extends Twig_Template
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
        $__internal_c2e93f460b4332c8806a9bc602ff3f4903fffd38cb8f0a0a7f5f061c9c484c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e93f460b4332c8806a9bc602ff3f4903fffd38cb8f0a0a7f5f061c9c484c2b->enter($__internal_c2e93f460b4332c8806a9bc602ff3f4903fffd38cb8f0a0a7f5f061c9c484c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5cdec3d0f3faf50563a9972a82c495355bc4160d8a39fe9d36b337370121e39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdec3d0f3faf50563a9972a82c495355bc4160d8a39fe9d36b337370121e39b->enter($__internal_5cdec3d0f3faf50563a9972a82c495355bc4160d8a39fe9d36b337370121e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c2e93f460b4332c8806a9bc602ff3f4903fffd38cb8f0a0a7f5f061c9c484c2b->leave($__internal_c2e93f460b4332c8806a9bc602ff3f4903fffd38cb8f0a0a7f5f061c9c484c2b_prof);

        
        $__internal_5cdec3d0f3faf50563a9972a82c495355bc4160d8a39fe9d36b337370121e39b->leave($__internal_5cdec3d0f3faf50563a9972a82c495355bc4160d8a39fe9d36b337370121e39b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
