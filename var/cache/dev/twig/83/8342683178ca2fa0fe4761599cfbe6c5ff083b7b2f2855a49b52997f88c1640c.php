<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cd2162b286b425d51d5c42f4cd691cacba6943476b4b5a3f0ee6eecf0ee59060 extends Twig_Template
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
        $__internal_8c06ccfddb542eae152ffc81bc475baf5402b0baf2b3eb9b70b9108ff33d110a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c06ccfddb542eae152ffc81bc475baf5402b0baf2b3eb9b70b9108ff33d110a->enter($__internal_8c06ccfddb542eae152ffc81bc475baf5402b0baf2b3eb9b70b9108ff33d110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e8470e28fcca20822d92727b43087f1e272591613f33721c2715b2ae6335fb67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8470e28fcca20822d92727b43087f1e272591613f33721c2715b2ae6335fb67->enter($__internal_e8470e28fcca20822d92727b43087f1e272591613f33721c2715b2ae6335fb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8c06ccfddb542eae152ffc81bc475baf5402b0baf2b3eb9b70b9108ff33d110a->leave($__internal_8c06ccfddb542eae152ffc81bc475baf5402b0baf2b3eb9b70b9108ff33d110a_prof);

        
        $__internal_e8470e28fcca20822d92727b43087f1e272591613f33721c2715b2ae6335fb67->leave($__internal_e8470e28fcca20822d92727b43087f1e272591613f33721c2715b2ae6335fb67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
