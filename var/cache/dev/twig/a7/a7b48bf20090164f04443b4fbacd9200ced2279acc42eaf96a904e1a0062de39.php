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
        $__internal_cc6ca62389dc9d15a4db3ac7a2a0e300e4a363d45a997bae44f786567a19fc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6ca62389dc9d15a4db3ac7a2a0e300e4a363d45a997bae44f786567a19fc3f->enter($__internal_cc6ca62389dc9d15a4db3ac7a2a0e300e4a363d45a997bae44f786567a19fc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_965e156d8a4efe51810894e97f2be9484cea9ff61b8ae2e25b461015d120dcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965e156d8a4efe51810894e97f2be9484cea9ff61b8ae2e25b461015d120dcd1->enter($__internal_965e156d8a4efe51810894e97f2be9484cea9ff61b8ae2e25b461015d120dcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cc6ca62389dc9d15a4db3ac7a2a0e300e4a363d45a997bae44f786567a19fc3f->leave($__internal_cc6ca62389dc9d15a4db3ac7a2a0e300e4a363d45a997bae44f786567a19fc3f_prof);

        
        $__internal_965e156d8a4efe51810894e97f2be9484cea9ff61b8ae2e25b461015d120dcd1->leave($__internal_965e156d8a4efe51810894e97f2be9484cea9ff61b8ae2e25b461015d120dcd1_prof);

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
