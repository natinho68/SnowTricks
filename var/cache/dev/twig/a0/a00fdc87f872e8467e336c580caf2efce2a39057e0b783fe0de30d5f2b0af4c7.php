<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2624ebf23c87beda8ecb2b017b0021a66ea15cecd5db003562c3967f6bd31e44 extends Twig_Template
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
        $__internal_a57a15834832fa8d6115b2c0bd1aab8a9fa0805c1f567c2c19001dbdd87c2e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57a15834832fa8d6115b2c0bd1aab8a9fa0805c1f567c2c19001dbdd87c2e3d->enter($__internal_a57a15834832fa8d6115b2c0bd1aab8a9fa0805c1f567c2c19001dbdd87c2e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_716616fb5b00d5e3165024b94d46f0313960a43432f158a42a05021bd75a0e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716616fb5b00d5e3165024b94d46f0313960a43432f158a42a05021bd75a0e5d->enter($__internal_716616fb5b00d5e3165024b94d46f0313960a43432f158a42a05021bd75a0e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a57a15834832fa8d6115b2c0bd1aab8a9fa0805c1f567c2c19001dbdd87c2e3d->leave($__internal_a57a15834832fa8d6115b2c0bd1aab8a9fa0805c1f567c2c19001dbdd87c2e3d_prof);

        
        $__internal_716616fb5b00d5e3165024b94d46f0313960a43432f158a42a05021bd75a0e5d->leave($__internal_716616fb5b00d5e3165024b94d46f0313960a43432f158a42a05021bd75a0e5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
