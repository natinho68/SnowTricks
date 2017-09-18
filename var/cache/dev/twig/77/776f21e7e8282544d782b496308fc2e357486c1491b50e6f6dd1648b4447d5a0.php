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
        $__internal_5a10b759e8d9d5d604fe9570e9126fd7830f6bf6f295e39cdde5859bd5ba8f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a10b759e8d9d5d604fe9570e9126fd7830f6bf6f295e39cdde5859bd5ba8f9a->enter($__internal_5a10b759e8d9d5d604fe9570e9126fd7830f6bf6f295e39cdde5859bd5ba8f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_508179ffbb99d0e54a8d277e780da1407cd9913d79ec42f9fcd4b8b39ad47bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508179ffbb99d0e54a8d277e780da1407cd9913d79ec42f9fcd4b8b39ad47bfb->enter($__internal_508179ffbb99d0e54a8d277e780da1407cd9913d79ec42f9fcd4b8b39ad47bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5a10b759e8d9d5d604fe9570e9126fd7830f6bf6f295e39cdde5859bd5ba8f9a->leave($__internal_5a10b759e8d9d5d604fe9570e9126fd7830f6bf6f295e39cdde5859bd5ba8f9a_prof);

        
        $__internal_508179ffbb99d0e54a8d277e780da1407cd9913d79ec42f9fcd4b8b39ad47bfb->leave($__internal_508179ffbb99d0e54a8d277e780da1407cd9913d79ec42f9fcd4b8b39ad47bfb_prof);

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
