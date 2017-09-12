<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fac4bda99c1c84e70b593071f7541a85fec033aa67a013a5231a0f75ae7c3c4d extends Twig_Template
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
        $__internal_dc686a9e326bac6ee5f630242ca1e738b0cddd98526e50e1c82002ae12497c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc686a9e326bac6ee5f630242ca1e738b0cddd98526e50e1c82002ae12497c67->enter($__internal_dc686a9e326bac6ee5f630242ca1e738b0cddd98526e50e1c82002ae12497c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3537842019dfe37a0a003ba542deb75830f37bf81c14403bf9f4344c20cf3837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3537842019dfe37a0a003ba542deb75830f37bf81c14403bf9f4344c20cf3837->enter($__internal_3537842019dfe37a0a003ba542deb75830f37bf81c14403bf9f4344c20cf3837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dc686a9e326bac6ee5f630242ca1e738b0cddd98526e50e1c82002ae12497c67->leave($__internal_dc686a9e326bac6ee5f630242ca1e738b0cddd98526e50e1c82002ae12497c67_prof);

        
        $__internal_3537842019dfe37a0a003ba542deb75830f37bf81c14403bf9f4344c20cf3837->leave($__internal_3537842019dfe37a0a003ba542deb75830f37bf81c14403bf9f4344c20cf3837_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
