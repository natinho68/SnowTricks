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
        $__internal_b3295c628e133c6671d87a2ea2223944db803b55d6421cd70aeeefd033b759d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3295c628e133c6671d87a2ea2223944db803b55d6421cd70aeeefd033b759d0->enter($__internal_b3295c628e133c6671d87a2ea2223944db803b55d6421cd70aeeefd033b759d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9768dcb5b4b30afdd1069385f085a7fc93e12dde0bc18a114ccfd0c3850b0d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9768dcb5b4b30afdd1069385f085a7fc93e12dde0bc18a114ccfd0c3850b0d04->enter($__internal_9768dcb5b4b30afdd1069385f085a7fc93e12dde0bc18a114ccfd0c3850b0d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b3295c628e133c6671d87a2ea2223944db803b55d6421cd70aeeefd033b759d0->leave($__internal_b3295c628e133c6671d87a2ea2223944db803b55d6421cd70aeeefd033b759d0_prof);

        
        $__internal_9768dcb5b4b30afdd1069385f085a7fc93e12dde0bc18a114ccfd0c3850b0d04->leave($__internal_9768dcb5b4b30afdd1069385f085a7fc93e12dde0bc18a114ccfd0c3850b0d04_prof);

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
