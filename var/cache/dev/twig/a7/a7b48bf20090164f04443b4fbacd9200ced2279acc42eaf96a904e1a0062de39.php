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
        $__internal_d37d48037f7c15a85b4a38d77a19ab0ca2500210a603fa565f0349d898f59014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37d48037f7c15a85b4a38d77a19ab0ca2500210a603fa565f0349d898f59014->enter($__internal_d37d48037f7c15a85b4a38d77a19ab0ca2500210a603fa565f0349d898f59014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eac1d6127cc3ff90b2d5e58dbf717c323819be6aadaf1e0505e8697dc9b9a0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac1d6127cc3ff90b2d5e58dbf717c323819be6aadaf1e0505e8697dc9b9a0d0->enter($__internal_eac1d6127cc3ff90b2d5e58dbf717c323819be6aadaf1e0505e8697dc9b9a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d37d48037f7c15a85b4a38d77a19ab0ca2500210a603fa565f0349d898f59014->leave($__internal_d37d48037f7c15a85b4a38d77a19ab0ca2500210a603fa565f0349d898f59014_prof);

        
        $__internal_eac1d6127cc3ff90b2d5e58dbf717c323819be6aadaf1e0505e8697dc9b9a0d0->leave($__internal_eac1d6127cc3ff90b2d5e58dbf717c323819be6aadaf1e0505e8697dc9b9a0d0_prof);

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
