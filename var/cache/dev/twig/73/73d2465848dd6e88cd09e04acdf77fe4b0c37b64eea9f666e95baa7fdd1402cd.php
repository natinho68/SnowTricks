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
        $__internal_c9d8c7361d19877d35ef581d99e4053997c4696a029fcc38cafcc652ded4e1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d8c7361d19877d35ef581d99e4053997c4696a029fcc38cafcc652ded4e1ba->enter($__internal_c9d8c7361d19877d35ef581d99e4053997c4696a029fcc38cafcc652ded4e1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d8a73066848f14960b8064a395b78eaf13652988790e82fb3f23504009b23a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a73066848f14960b8064a395b78eaf13652988790e82fb3f23504009b23a9f->enter($__internal_d8a73066848f14960b8064a395b78eaf13652988790e82fb3f23504009b23a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c9d8c7361d19877d35ef581d99e4053997c4696a029fcc38cafcc652ded4e1ba->leave($__internal_c9d8c7361d19877d35ef581d99e4053997c4696a029fcc38cafcc652ded4e1ba_prof);

        
        $__internal_d8a73066848f14960b8064a395b78eaf13652988790e82fb3f23504009b23a9f->leave($__internal_d8a73066848f14960b8064a395b78eaf13652988790e82fb3f23504009b23a9f_prof);

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
