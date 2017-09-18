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
        $__internal_9f64712b284b3db450598f4b35b7414edc905bda6a28e958869d97836780946e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f64712b284b3db450598f4b35b7414edc905bda6a28e958869d97836780946e->enter($__internal_9f64712b284b3db450598f4b35b7414edc905bda6a28e958869d97836780946e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_669230cf47e10241ad3a79ba83b68282735aa4393258e48d33af981b5bffe584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669230cf47e10241ad3a79ba83b68282735aa4393258e48d33af981b5bffe584->enter($__internal_669230cf47e10241ad3a79ba83b68282735aa4393258e48d33af981b5bffe584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9f64712b284b3db450598f4b35b7414edc905bda6a28e958869d97836780946e->leave($__internal_9f64712b284b3db450598f4b35b7414edc905bda6a28e958869d97836780946e_prof);

        
        $__internal_669230cf47e10241ad3a79ba83b68282735aa4393258e48d33af981b5bffe584->leave($__internal_669230cf47e10241ad3a79ba83b68282735aa4393258e48d33af981b5bffe584_prof);

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
