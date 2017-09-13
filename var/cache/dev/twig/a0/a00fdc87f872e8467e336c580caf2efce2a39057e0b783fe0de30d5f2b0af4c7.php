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
        $__internal_ed8562713477e0a1c11854538530b4a16aca3335d89efb886d88b6563efcc57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8562713477e0a1c11854538530b4a16aca3335d89efb886d88b6563efcc57e->enter($__internal_ed8562713477e0a1c11854538530b4a16aca3335d89efb886d88b6563efcc57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_386ee10466c61ca4557177409d128a7972327214ca33d36456a85d1bb3c60270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386ee10466c61ca4557177409d128a7972327214ca33d36456a85d1bb3c60270->enter($__internal_386ee10466c61ca4557177409d128a7972327214ca33d36456a85d1bb3c60270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ed8562713477e0a1c11854538530b4a16aca3335d89efb886d88b6563efcc57e->leave($__internal_ed8562713477e0a1c11854538530b4a16aca3335d89efb886d88b6563efcc57e_prof);

        
        $__internal_386ee10466c61ca4557177409d128a7972327214ca33d36456a85d1bb3c60270->leave($__internal_386ee10466c61ca4557177409d128a7972327214ca33d36456a85d1bb3c60270_prof);

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
