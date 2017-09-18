<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c5c9375d9b89940dd81a9fa35f5a7bf7a9a9e20b5cddb35153f223565894d2c6 extends Twig_Template
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
        $__internal_d075cc35b05bb4058097441f31f8b1fd6d35247acca0f2d29a9f458b4ff9e00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d075cc35b05bb4058097441f31f8b1fd6d35247acca0f2d29a9f458b4ff9e00d->enter($__internal_d075cc35b05bb4058097441f31f8b1fd6d35247acca0f2d29a9f458b4ff9e00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_88de8f841f5074c59951fd082ccd9366652146f4e232cb105c2534e280b2675b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88de8f841f5074c59951fd082ccd9366652146f4e232cb105c2534e280b2675b->enter($__internal_88de8f841f5074c59951fd082ccd9366652146f4e232cb105c2534e280b2675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d075cc35b05bb4058097441f31f8b1fd6d35247acca0f2d29a9f458b4ff9e00d->leave($__internal_d075cc35b05bb4058097441f31f8b1fd6d35247acca0f2d29a9f458b4ff9e00d_prof);

        
        $__internal_88de8f841f5074c59951fd082ccd9366652146f4e232cb105c2534e280b2675b->leave($__internal_88de8f841f5074c59951fd082ccd9366652146f4e232cb105c2534e280b2675b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
