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
        $__internal_d52b338ba6a89e03967f9fdcdf073c5e1741e7405df68d6f30b595beed4cd8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52b338ba6a89e03967f9fdcdf073c5e1741e7405df68d6f30b595beed4cd8de->enter($__internal_d52b338ba6a89e03967f9fdcdf073c5e1741e7405df68d6f30b595beed4cd8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1271029ca8331f8875500cd3b55141243024d5680720b03a56e1d90b7a9663e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1271029ca8331f8875500cd3b55141243024d5680720b03a56e1d90b7a9663e7->enter($__internal_1271029ca8331f8875500cd3b55141243024d5680720b03a56e1d90b7a9663e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d52b338ba6a89e03967f9fdcdf073c5e1741e7405df68d6f30b595beed4cd8de->leave($__internal_d52b338ba6a89e03967f9fdcdf073c5e1741e7405df68d6f30b595beed4cd8de_prof);

        
        $__internal_1271029ca8331f8875500cd3b55141243024d5680720b03a56e1d90b7a9663e7->leave($__internal_1271029ca8331f8875500cd3b55141243024d5680720b03a56e1d90b7a9663e7_prof);

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
