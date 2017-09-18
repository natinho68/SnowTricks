<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_458d21bc00723d898918721ce1cc1220dbc8e16363130bb73be0532ff98570f5 extends Twig_Template
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
        $__internal_a4a1ed55f93233f1c426f6afc4dcc9c3b8a33db950639134e2a428156a91f9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a1ed55f93233f1c426f6afc4dcc9c3b8a33db950639134e2a428156a91f9c3->enter($__internal_a4a1ed55f93233f1c426f6afc4dcc9c3b8a33db950639134e2a428156a91f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0267e8890c2b8034d123b3184caba6258ab44f063b75d1af9a310769d8b0f750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0267e8890c2b8034d123b3184caba6258ab44f063b75d1af9a310769d8b0f750->enter($__internal_0267e8890c2b8034d123b3184caba6258ab44f063b75d1af9a310769d8b0f750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a4a1ed55f93233f1c426f6afc4dcc9c3b8a33db950639134e2a428156a91f9c3->leave($__internal_a4a1ed55f93233f1c426f6afc4dcc9c3b8a33db950639134e2a428156a91f9c3_prof);

        
        $__internal_0267e8890c2b8034d123b3184caba6258ab44f063b75d1af9a310769d8b0f750->leave($__internal_0267e8890c2b8034d123b3184caba6258ab44f063b75d1af9a310769d8b0f750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
