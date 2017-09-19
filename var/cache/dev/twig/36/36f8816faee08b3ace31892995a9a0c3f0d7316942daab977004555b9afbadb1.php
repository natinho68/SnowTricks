<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_64758c7d4a80afbfbf0c23ffecef34269059526dccbb4706918ae45e508582d7 extends Twig_Template
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
        $__internal_b5d3ba2dd5756b354057d64159baf0d1fd76296d991d5daa10d95b117a5588c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d3ba2dd5756b354057d64159baf0d1fd76296d991d5daa10d95b117a5588c1->enter($__internal_b5d3ba2dd5756b354057d64159baf0d1fd76296d991d5daa10d95b117a5588c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_19db8bb39706ac92bbf63f6ee94fcfc532632910ad05c7fcd53a4bbc595a2f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19db8bb39706ac92bbf63f6ee94fcfc532632910ad05c7fcd53a4bbc595a2f49->enter($__internal_19db8bb39706ac92bbf63f6ee94fcfc532632910ad05c7fcd53a4bbc595a2f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b5d3ba2dd5756b354057d64159baf0d1fd76296d991d5daa10d95b117a5588c1->leave($__internal_b5d3ba2dd5756b354057d64159baf0d1fd76296d991d5daa10d95b117a5588c1_prof);

        
        $__internal_19db8bb39706ac92bbf63f6ee94fcfc532632910ad05c7fcd53a4bbc595a2f49->leave($__internal_19db8bb39706ac92bbf63f6ee94fcfc532632910ad05c7fcd53a4bbc595a2f49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
