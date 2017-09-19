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
        $__internal_6dfc4fc382662210495bb681d618ca14a2b8d1063f04f2bdfe602806a80c248d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfc4fc382662210495bb681d618ca14a2b8d1063f04f2bdfe602806a80c248d->enter($__internal_6dfc4fc382662210495bb681d618ca14a2b8d1063f04f2bdfe602806a80c248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d8f5708b917f5d1bd1d347d281176952ce8ad3a1d9aa832595f4ef70439d3ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f5708b917f5d1bd1d347d281176952ce8ad3a1d9aa832595f4ef70439d3ae6->enter($__internal_d8f5708b917f5d1bd1d347d281176952ce8ad3a1d9aa832595f4ef70439d3ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6dfc4fc382662210495bb681d618ca14a2b8d1063f04f2bdfe602806a80c248d->leave($__internal_6dfc4fc382662210495bb681d618ca14a2b8d1063f04f2bdfe602806a80c248d_prof);

        
        $__internal_d8f5708b917f5d1bd1d347d281176952ce8ad3a1d9aa832595f4ef70439d3ae6->leave($__internal_d8f5708b917f5d1bd1d347d281176952ce8ad3a1d9aa832595f4ef70439d3ae6_prof);

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
